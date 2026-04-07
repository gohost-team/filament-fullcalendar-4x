@php
    $plugin = \Saade\FilamentFullCalendar\FilamentFullCalendarPlugin::get();
@endphp

<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex justify-end flex-1 mb-4">
            <x-filament::actions :actions="$this->getCachedHeaderActions()" class="shrink-0" />
        </div>

        <div wire:ignore x-load
            x-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('filament-fullcalendar-alpine', 'saade/filament-fullcalendar') }}"
            x-ignore x-data="fullcalendar({
                locale: @js($plugin->getLocale()),
                plugins: @js($plugin->getPlugins()),
                schedulerLicenseKey: @js($plugin->getSchedulerLicenseKey()),
                timeZone: @js($plugin->getTimezone()),
                config: @js($this->getConfig()),
                editable: @json($plugin->isEditable()),
                selectable: @json($plugin->isSelectable()),
                eventClassNames: {!! htmlspecialchars($this->eventClassNames(), ENT_COMPAT) !!},
                eventContent: {!! htmlspecialchars($this->eventContent(), ENT_COMPAT) !!},
                eventDidMount: {!! htmlspecialchars($this->eventDidMount(), ENT_COMPAT) !!},
                eventWillUnmount: {!! htmlspecialchars($this->eventWillUnmount(), ENT_COMPAT) !!},
                resourceLabelClassNames: {!! htmlspecialchars($this->resourceLabelClassNames(), ENT_COMPAT) !!},
                resourceLabelContent: {!! htmlspecialchars($this->resourceLabelContent(), ENT_COMPAT) !!},
                resourceLabelDidMount: {!! htmlspecialchars($this->resourceLabelDidMount(), ENT_COMPAT) !!},
                resourceGroupLabelClassNames: {!! htmlspecialchars($this->resourceGroupLabelClassNames(), ENT_COMPAT) !!},
                resourceGroupLabelContent: {!! htmlspecialchars($this->resourceGroupLabelContent(), ENT_COMPAT) !!},
                resourceGroupLabelDidMount: {!! htmlspecialchars($this->resourceGroupLabelDidMount(), ENT_COMPAT) !!},
                resourceLaneClassNames: {!! htmlspecialchars($this->resourceLaneClassNames(), ENT_COMPAT) !!},
                resourceLaneContent: {!! htmlspecialchars($this->resourceLaneContent(), ENT_COMPAT) !!},
                resourceGroupLaneClassNames: {!! htmlspecialchars($this->resourceGroupLaneClassNames(), ENT_COMPAT) !!},
                resourceGroupLaneContent: {!! htmlspecialchars($this->resourceGroupLaneContent(), ENT_COMPAT) !!},
            })">
        </div>
    </x-filament::section>

    <x-filament-actions::modals />
</x-filament-widgets::widget>
