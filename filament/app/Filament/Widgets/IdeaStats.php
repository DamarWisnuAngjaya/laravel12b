<?php

namespace App\Filament\Widgets;

use App\Enums\Priority;
use App\Enums\Status;
use App\Models\Idea;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class IdeaStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Ideas', Idea::count())
                ->description('All ideas in vault')
                ->color('primary'),

            Stat::make('High Priority', Idea::where('priority', Priority::High->value)->count())
                ->description('Need attention')
                ->color(Priority::High->getcolor()),

            Stat::make('In Progress', Idea::where('status', Status::InProgress->value)->count())
                ->description('Currently being worked on')
                ->color(Status::InProgress->getcolor()),

            Stat::make('Completed', Idea::where('status', Status::Completed->value)->count())
                ->description('Finished ideas')
                ->color(Status::Completed->getcolor()),
        ];
    }
}
