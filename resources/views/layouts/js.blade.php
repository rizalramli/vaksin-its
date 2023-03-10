<script src="{{ asset('template/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/lib/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('template/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('template/lib/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('template/js/dashforge.js') }}"></script>
<script src="{{ asset('template/js/dashforge.aside.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<!-- Script base -->
<script>
    //canvas menu
    $(function(){
        'use strict'

        $('.off-canvas-menu').on('click', function(e){
            e.preventDefault();
            var target = $(this).attr('href');
            $(target).addClass('show');
        });

        $('.off-canvas .close').on('click', function(e){
            e.preventDefault();
            $(this).closest('.off-canvas').removeClass('show');
        })

        $(document).on('click touchstart', function(e){
            e.stopPropagation();
            if(!$(e.target).closest('.off-canvas-menu').length) {
            var offCanvas = $(e.target).closest('.off-canvas').length;
            if(!offCanvas) {
                $('.off-canvas.show').removeClass('show');
            }
            }
        });
    });

    //tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //allow focus menu
    $(document).on('click', '.allow-focus', function (e) {
        e.stopPropagation();
    });
    
    //file name input
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<script>
    $(function(){
    'use strict'

    $('[data-toggle="tooltip"]').tooltip()

    $('.df-example .btn-primary').tooltip({
        template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })

    $('.df-example .btn-secondary').tooltip({
        template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })

    $('.df-example .btn-success').tooltip({
        template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })

    $('.df-example .btn-danger').tooltip({
        template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })


    });
</script>

<!-- Datatable -->

<script src="{{ asset('template/lib/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('template/lib/datatables.net/js/jquery.dataTables.min.js') }}"></script>

<script>
      // Adding placeholder for search input
      (function($) {

        'use strict'

        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
          searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

          // invoke parent method
          var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

          this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

          return $rendered;
        };

      })(window.jQuery);


      $(function(){
        'use strict'

        // Basic with search
        $('.select2').select2({
          placeholder: 'Pilih',
          searchInputPlaceholder: 'Cari'
        });

        // Disable search
        $('.select2-no-search').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one'
        });

        // Clearable selection
        $('.select2-clear').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one',
          allowClear: true
        });

        // Limit selection
        $('.select2-limit').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one',
          maximumSelectionLength: 2
        });

      });
</script>

@yield('script')