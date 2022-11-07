<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
@include('frontend.includes.head')
<body>
<!--header-->
@include('frontend.includes.nav')
<!---->
@include('frontend.includes.side')
<!-- start content -->
@forelse($data['searched_items'] as $search)
    <div>

        <div class="  product-grid">
            <div class="content_box"><a href="{{route('frontend.single',$search->id)}}">
                    <div class="left-grid-view grid-view-left">
                        <img src="{{asset('uploads/images/product/'.$search->image)}}"  alt="" style="height: 300px; width: 243px; boarder:15px" >
                        <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                </a>
            </div>
            <h4><a href="#"> {{$search->name}}</a></h4>
            <p>{!! $search->description !!}</p>
            Rs. {{$search->price}}
        </div>
    </div>


    </div>

@empty
    <div>


        <h2 style="margin-top: 5%;color: ">No items found for "<strong >{{$query}}</strong>" </h2>





    </div>


@endforelse

<div class="clearfix"> </div>
</div>
<!---->
@include('frontend.includes.footer')
</body>
</html>
