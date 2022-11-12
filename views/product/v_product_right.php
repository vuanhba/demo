<div class="col-md-8 products-right">

    <div>

    </div>
    <div class="men-wear-top">
        <script src="public/layout/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
        </script>
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <img class="img-responsive" src="public/layout/images/men1.jpg" alt=" "/>
                </li>
                <li>
                    <img class="img-responsive" src="public/layout/images/men2.jpg" alt=" "/>
                </li>
                <li>
                    <img class="img-responsive" src="public/layout/images/men1.jpg" alt=" "/>
                </li>
                <li>
                    <img class="img-responsive" src="public/layout/images/men2.jpg" alt=" "/>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>



    <div class="clearfix"></div>
</div>