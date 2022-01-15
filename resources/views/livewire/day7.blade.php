<div>
    <h2>{{ $count }}</h2>
    <button wire:click="addCount">+</button>
    <button wire:click="setCount(100)">設為100</button>
    <button wire:click="$set('count', 999)">設為999</button>
    <button wire:click="$set('count', 0)">設為0</button>
</div>
<div>

</div>
<!-- <form wire:submit.prevent="save">

    <button>Save</button>
</form>
<input wire:keydown.enter="addCount"> -->