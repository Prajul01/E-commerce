<!DOCTYPE html>
<html>
@include('frontend.includes.head')
<body>
<!--header-->
@include('frontend.includes.nav')
<!---->


<section class="pt-5 pb-5">
    <div class="container">
        <div class="row w-100">
            <div class="col-lg-12 col-md-12 col-12">
                <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
                <p class="mb-5 text-center">
                    <?php $quan = 0 ?>



                    <i class="text-info font-weight-bold">{{$data['cart']}}</i> products in your cart</p>
                <table id="shoppingCart" class="table table-condensed table-responsive">
                    <thead>
                    <tr>

                        <th style="width:60%;color: #0a0e14">Product</th>
                        <th style="width:12% ;color: #0a0e14">Price</th>
                        <th style="width:10% ;color: #0a0e14">Quantity</th>
                        <th style="width:16%;color: #0a0e14">Action</th>

                    </tr>
                    </thead>
                    <tbody>



                    <?php $total = 0?>
{{--                     ($posts as $post)--}}





                    @forelse($data['cartItems'] as $card)


                        <tr>
                            <td data-th="Product">
                                <div class="row">

                                    <div class="col-md-3 text-left">
                                        <img
                                            src="{{asset('uploads/images/product/'.$card->Products->image)}}"
                                            alt=" " class="img-responsive"
                                            style="height: 90px; width: 90px;  "/>
                                    </div>
                                    <div class="col-md-9 text-left mt-sm-2">
                                        <p>{{Str::ucfirst($card->Products->name)}}</p>

                                    </div>
                                </div>
                            </td>

                            <td data-th="Price"> <p>{{$card->quantity * $card->Products->price}} = {{$card->quantity}} * {{$card->Products->price}}</p></td>

                            <td data-th="Quantity">

                                <input class="form-control" type="number" value="{{$card->quantity}}" min="1" readonly>

                            </td>

                            <td class="actions" data-th="">



                                <form class="d-inline" action="{{route('cart.destroy',$card->id)}}" method="post">
                                    <input type="hidden" name="_method" value="delete"/>
                                    @csrf

                                    <button type="submit" > <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="current
                                            Color" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0
                                                    0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0
                                                    0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8
                                                     5a.5.5 0 0 1
                                                     .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.
                                                     5 0 0 1 1 0z"/>
                                        </svg></button>

                                </form>

                            </td>
                        </tr>
                            <?php  $total += $card->quantity * $card->Products->price?>
                            <?php  $quan += $card->quantity ?>


                    @empty
                        <tr>
                            <td> <h2 class="text-danger" style="color: red;text-align: end">No items found</h2></td></tr>



                    @endforelse


                    </tbody>
                    <hr>
                </table>

                <div class="float-left text-right">
                    <h1>Total item:{{$quan}}</h1>
                </div>


                <div class="float-right text-right">
                    <h4>Subtotal:</h4>
                    <h1>Total: RS{{ $total}}</h1>
                </div>
            </div>
        </div>
        <div class="row mt-4 d-flex align-items-center">
{{--            @if($data['cartItems']==Null)--}}
            <div class="col-sm-6 order-md-2 text-right">
                <a href="{{route('checkout')}}" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a>
            </div>

            <div class="col-sm-6 order-md-2 text-left">
                <a href="{{route('frontend.home')}}" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Continue Shopping</a>
            </div>

        </div>
    </div>
</section>
@include('frontend.includes.footer')


</body>
</html>




