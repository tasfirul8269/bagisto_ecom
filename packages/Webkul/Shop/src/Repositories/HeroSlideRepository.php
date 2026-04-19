<?php

namespace Webkul\Shop\Repositories;

use Illuminate\Support\Collection;
use Webkul\Core\Eloquent\Repository;
use Webkul\Shop\Models\HeroSlide;

class HeroSlideRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return HeroSlide::class;
    }

    /**
     * Get active slides for a channel, ordered by sort_order.
     */
    public function getActiveSlides(?int $channelId = null): Collection
    {
        $channelId = $channelId ?: core()->getCurrentChannel()->id;

        return $this->model
            ->where('status', 1)
            ->where('channel_id', $channelId)
            ->orderBy('sort_order')
            ->get();
    }
}
