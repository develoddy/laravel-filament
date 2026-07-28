<?php

namespace App\Observers;

use App\Models\Portfolio;

class PortfolioObserver
{
    /**
     * Handle the Portfolio "saving" event.
     * Ensure only one portfolio can be featured at a time.
     */
    public function saving(Portfolio $portfolio): void
    {
        // If this portfolio is being marked as featured
        if ($portfolio->featured && $portfolio->isDirty('featured')) {
            // Set all other portfolios to not featured
            Portfolio::where('id', '!=', $portfolio->id)
                ->where('featured', true)
                ->update(['featured' => false]);
        }
    }

    /**
     * Handle the Portfolio "created" event.
     */
    public function created(Portfolio $portfolio): void
    {
        //
    }

    /**
     * Handle the Portfolio "updated" event.
     */
    public function updated(Portfolio $portfolio): void
    {
        //
    }

    /**
     * Handle the Portfolio "deleted" event.
     */
    public function deleted(Portfolio $portfolio): void
    {
        //
    }

    /**
     * Handle the Portfolio "restored" event.
     */
    public function restored(Portfolio $portfolio): void
    {
        //
    }

    /**
     * Handle the Portfolio "force deleted" event.
     */
    public function forceDeleted(Portfolio $portfolio): void
    {
        //
    }
}
