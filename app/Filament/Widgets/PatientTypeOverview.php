<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Patient;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Gato', Patient::query()->where('tipo', 'Gato')->count()),
            Stat::make('Perro', Patient::query()->where('tipo', 'Perro')->count()),
            Stat::make('Conejo', Patient::query()->where('tipo', 'Conejo')->count()),

        ];
    }
}
