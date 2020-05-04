
    <form method="post" action="{{ route('addOrder') }}" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @csrf
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" class="form-control" name="nama_order">
                            <div class="invalid-feedback">
                                Input Nama bosz!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Paket</label>
                            <select class="form-control select2" name="nama_paket" required>
                                <option value="">None</option>
                                <option value="Ekonomis">Ekonomis</option>
                                <option value="Basic">Basic</option>
                                <option value="Premium">Premium</option>
                                <option value="Business">Business</option>
                                <option value="Luxury">Luxury</option>
                            </select>
                            <div class="invalid-feedback">
                                Input paketnya bosz
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <select class="form-control select2" name="data_logo" required>
                                <option value="">None</option>
                                <option value="Dibuatkan">Dibuatkan</option>
                                <option value="Email">Email</option>
                            </select>
                            <div class="invalid-feedback">
                                Logonya darimana bosz?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Data</label>
                            <select class="form-control select2" name="data_website" required>
                                <option value="">None</option>
                                <option value="Full Kita">Full Kita</option>
                                <option value="Full Client">Full Client</option>
                                <option value="Kita Bantu">Kita Bantu</option>
                            </select>
                            <div class="invalid-feedback">
                                Datanya?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tipe Post</label>
                            <select class="form-control select2" name="tipe_post" required>
                                <option value="">None</option>
                                <option value="Artikel">Artikel</option>
                                <option value="Produk">Produk</option>
                                <option value="Service">Service</option>
                                <option value="Gallery">Gallery</option>
                                <option value="Elementor">Elementor</option>
                                <option value="Landing">Landing</option>
                            </select>
                            <div class="invalid-feedback">
                                Post nya tentang apa?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Target</label>
                            <select class="form-control select2" name="target" required>
                                <option value="">None</option>
                                <option value="WA atau Telepon">WA atau Telepon</option>
                                <option value="Email">Email</option>
                                <option value="Checkout">Checkout</option>
                            </select>
                            <div class="invalid-feedback">
                                Target action nya?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Domain</label>
                            <input type="text" class="form-control" name="domain">
                            <div class="invalid-feedback">
                                Input Domain bosz!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Due Date</label>
                            <input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="duedate"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pick Your Color</label>
                            <div class="input-group colorpickerinput">
                                <input type="text" class="form-control" name="warna">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="fas fa-fill-drip"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Username Akun WordPress</label>
                            <input type="text" class="form-control" name="akun_username">
                        </div>
                        <div class="form-group">
                            <label>Email Akun</label>
                            <input type="text" class="form-control" name="akun_email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control pwstrength" data-indicator="pwindicator"
                                    name="akun_password">
                            </div>
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deadline</label>
                            <input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="deadline"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Request</label>
                            <textarea class="form-control summernote-simple" name="request"></textarea>
                            <!-- <textarea class="form-control" name="request"></textarea> -->
                        </div>
                        <div class="form-group">
                            <label>Web Pesaing</label>
                            <textarea class="form-control summernote-simple" name="web_pesaing"></textarea>
                            <!-- <textarea class="form-control" name="web_pesaing"></textarea> -->
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
