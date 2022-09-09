<div>
    <livewire:guest.components.page-heading :header="$header"/>


    <div class="mx-4 my-2 " x-data>
        <h2 class="my-2 drop-shadow flex justify-center"> Your Cart</h2>
<form wire:submit.prevent="placeOrder">
        <table class="table-auto border-2 border-red-500/50 border-collapse border-spacing-2 w-full">
            <thead>
                <tr>
                    <th class="border border-slate-300">Item</th>
                    <th class="border border-slate-300">Quantity</th>
                    <th class="border border-slate-300">Unit Price</th>
                    <th class="border border-slate-300">Sub-Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach (Cart::content() as $row )
                    <tr>
                        <td class="border border-slate-300"> {{ $row->name }}</td>
                        <td class="border border-slate-300"> 
                            <input type="number" min="1" id="{{$row->id}}.qty" value="{{ $row->qty }}"
                            x-on:change="changeQTY({{$row->id}})"/>
                        
                        </td>
                        <td class="border border-slate-300"> 
                            <span id="{{$row->id}}price">{{ $row->price }}</span>
                        </td>
                        <td class="border border-slate-300"> {{ $row->price*$row->qty }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <span class="p-3 border-2">
            Total: {{ Cart::total()}}
        </span>
        <button type="button" class=" p-3 bg-gradient-to-br from-pink-500/20 to-orange-500/20 hover:bg-gradient-to-bl">
            Update Cart
        </button>
        <button type="submit" 
        class=" p-3 bg-gradient-to-br from-pink-500/50 to-orange-500/50 hover:bg-gradient-to-bl">
            Place Order
        </button>
    </form>
    </div>

</div>
