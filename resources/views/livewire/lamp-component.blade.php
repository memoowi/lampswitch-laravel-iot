<div class="position-absolute top-50 start-50 translate-middle">
    <h1 class="d-inline">Lamp Control</h1>&nbsp;&nbsp;<span class="text-secondary fw-bold fs-6">By {{ $name }}</span>
    <br><br>
    <button class="btn fw-medium fs-3 p-3 @if ($status == 1)
        btn-success
    @else
        btn-danger
    @endif" wire:click="toggleButton">
        @if ($status == '1')
            Turn On
        @else
            Turn Off         
        @endif
    </button>
    <br><br>
    <h5>Lamp Status: <span wire:poll.1000ms class="@if ($status == 0) bg-success @else bg-danger @endif rounded-5 px-4 py-2 text-white">{{ $statusProperty }}</span></h5>
    <h5>Value : <span wire:poll.1000ms>{{ $status }}</span> </h5>
</div>
