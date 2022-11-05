<div class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left" style="border: 1px white solid;">
        <h3 class="cate">CATEGORIES</h3>
        <ul class= >

            @foreach($data['category'] as $cat)
                <div style="border: 1px solid black;padding: 10px">
                <li><a href="{{route('f.category',$cat->id)}}" id="category_id" > <strong>{{$cat->name}}</strong></a>
                </li>
                </div>
                @endforeach








        </ul>
    </div>
    <!--initiate accordion-->
    <script type="text/javascript">
        $(function() {
            var menu_ul = $('.menu > li > ul'),
                menu_a  = $('.menu > li > a');
            menu_ul.hide();
            menu_a.click(function(e) {
                e.preventDefault();
                if(!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true,true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true,true).slideUp('normal');
                }
            });

        });
    </script>
    <div class=" chain-grid menu-chain">
{{--        <a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>--}}
{{--        <div class="grid-chain-bottom chain-watch">--}}
{{--            <span class="actual dolor-left-grid">300$</span>--}}
{{--            <span class="reducedfrom">500$</span>--}}
{{--            <h6><a href="single.html">Lorem ipsum dolor</a></h6>--}}
{{--        </div>--}}
    </div>
    <a class="view-all all-product" href="{{route('frontend.product')}}">VIEW ALL PRODUCTS<span> </span></a>
</div>
