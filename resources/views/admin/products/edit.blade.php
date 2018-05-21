


<div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
                <div class="modal-header">
                        <div class="msg"></div>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <p>Update</p>
                        <div class="form-horizontal">
                                <input type="hidden" name="_method" value="put">
                                {{ csrf_field() }}


                                @include('admin.products.partials.form')


                        </div>
                </div>
        </div>

</div>