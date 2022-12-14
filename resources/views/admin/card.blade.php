@extends('layout') 
 
@section('title', 'Cart') 

@section('content') 

    <span id="status"></span> 

    <table id="cart" class="table table-hover table-condensed"> 

        <thead> 

        <tr> 
            <th style="width:50%">Product</th> 
            <th style="width:10%">Price</th> 
            <th style="width:8%">Quantity</th> 
            <th style="width:22%" class="text-center">Subtotal</th> 
            <th style="width:10%"></th> 
        </tr>

        </thead> 
        <tbody>
        <?php $total = 0 ?> 


        @if(session('cart')) 
            @foreach((array) session('cart') as $id => $details) 
                <?php $total += $details['price'] * $details['quantity'] ?> 
                <tr> 

                    

        </tbody> 
        <tfoot> 
        <tr class="visible-xs"> 
            <td class="text-center"><strong>Total $<span class="cart-total">{{ $total }}</span></strong></td> 
        </tr> 
        <tr> 
            <td><a href="{{ url('/home') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td> 
            <td colspan="2" class="hidden-xs"></td> 
            <td class="hidden-xs text-center"><strong>Total $<span class="cart-total">{{ $total }}</span></strong></td> 
        </tr> 
        </tfoot> 
    </table> 

@endsection 