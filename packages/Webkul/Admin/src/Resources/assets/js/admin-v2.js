// Admin V2 - Modern JavaScript
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import collapse from '@alpinejs/collapse';

// Initialize Alpine.js
window.Alpine = Alpine;

// Register plugins
Alpine.plugin(focus);
Alpine.plugin(collapse);

// Start Alpine
Alpine.start();

// Toast notification system
window.showToast = (message, type = 'success', duration = 3000) => {
    const toast = document.createElement('div');
    const colors = {
        success: 'bg-green-500',
        error: 'bg-red-500',
        warning: 'bg-amber-500',
        info: 'bg-blue-500'
    };
    
    const icons = {
        success: '✓',
        error: '✕',
        warning: '⚠',
        info: 'ℹ'
    };
    
    toast.className = `fixed top-4 right-4 z-[9999] ${colors[type]} text-white px-6 py-3 rounded-lg shadow-lg flex items-center gap-3 animate-slide-right`;
    toast.innerHTML = `
        <span class="text-lg font-bold">${icons[type]}</span>
        <span class="text-sm font-medium">${message}</span>
    `;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateX(100%)';
        toast.style.transition = 'all 300ms ease';
        setTimeout(() => toast.remove(), 300);
    }, duration);
};

// Auto-save functionality for forms
window.autoSave = (formId, saveUrl) => {
    const form = document.getElementById(formId);
    if (!form) return;
    
    let timeout;
    
    form.addEventListener('input', () => {
        clearTimeout(timeout);
        timeout = setTimeout(async () => {
            try {
                const formData = new FormData(form);
                const response = await fetch(saveUrl, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                });
                
                if (response.ok) {
                    console.log('Auto-saved successfully');
                }
            } catch (error) {
                console.error('Auto-save failed:', error);
            }
        }, 2000);
    });
};

// Keyboard shortcuts
document.addEventListener('keydown', (e) => {
    // Cmd/Ctrl + K for search
    if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
        e.preventDefault();
        const searchInput = document.querySelector('input[type="search"]');
        if (searchInput) {
            searchInput.focus();
        }
    }
    
    // Escape to close modals
    if (e.key === 'Escape') {
        document.querySelectorAll('[x-show]').forEach(el => {
            if (el._x_dataStack && el._x_dataStack[0]?.open) {
                el._x_dataStack[0].open = false;
            }
        });
    }
});

// Confirm dialog for destructive actions
window.confirmAction = (message = 'Are you sure you want to perform this action?') => {
    return confirm(message);
};

// Form validation helper
window.validateForm = (formId) => {
    const form = document.getElementById(formId);
    if (!form) return false;
    
    const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('border-red-500');
            isValid = false;
        } else {
            input.classList.remove('border-red-500');
        }
    });
    
    return isValid;
};

// Image preview for file uploads
window.previewImage = (input, previewId) => {
    const file = input.files[0];
    if (!file) return;
    
    const reader = new FileReader();
    reader.onload = (e) => {
        const preview = document.getElementById(previewId);
        if (preview) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
    };
    reader.readAsDataURL(file);
};

// Initialize on DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
    // Add loading state to forms on submit
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', () => {
            const submitButton = form.querySelector('button[type="submit"]');
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processing...
                `;
            }
        });
    });
    
    console.log('Frooxi Admin V2 initialized successfully');
});
