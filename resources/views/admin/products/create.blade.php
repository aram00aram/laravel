

<div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <div class="msg"></div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <p>create</p>
            <div class="form-horizontal" id="myForm" >


                {{ csrf_field() }}

                {{-- Form include --}}
                @include('admin.products.partials.form')

            </div>

        </div>
    </div>

</div>