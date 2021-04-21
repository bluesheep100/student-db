<div class="modal" id="create-student" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content w-600">
            <a href="#" class="close" role="button" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>

            <h5 class="modal-title">Opret elev</h5>

            <form action="{{ route('student-create') }}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="form-group">
                    <label for="name" class="required">Navn</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email" class="required">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-7">
                        <div class="form-group">
                            <label for="phone_number" class="required">Tlf. Nr.</label>
                            <input type="tel" id="phone_number" name="phone" class="form-control" pattern="\d{8}" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 offset-md-1">
                        <div class="form-group">
                            <label for="birthday" class="required">Fødselsdato</label>
                            <input type="date" id="birthday" name="date" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="form-group">
                            <label for="address" class="required">Adresse</label>
                            <input type="text" id="address" name="address" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 offset-md-1">
                        <div class="form-group">
                            <label for="zip_code" class="required">Post Nr.</label>
                            <input type="text" id="zip_code" name="zip_code" class="form-control" pattern="\d{4}" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="card_number" class="required">Kort Nr.</label>
                    <input type="text" id="card_number" name="checkin_card_id" onkeydown="return event.key !== 'Enter';" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="portrait" class="required">Portræt</label>
                    <div class="custom-file">
                        <input type="file" id="portrait" name="portrait" required>
                        <label for="portrait">Vælg billede</label>
                    </div>
                </div>
                <div class="text-right mt-20">
                    <a href="#" class="btn mr-5" role="button">Luk</a>
                    <button type="submit" class="btn btn-primary">Opret</button>
                </div>
            </form>
        </div>
    </div>
</div>
