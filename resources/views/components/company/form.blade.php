<div class="page-wrapper p-b-100 ">
    <div class="wrapper wrapper--w680">
        <div class="card card-1">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Just few more moments setup your company</h2>
                <form method="POST" action="{{url('/home/create-company')}}">
                    @csrf
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Company name" name="name">
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Company email" name="email">
                    </div>
                    <div class="row row-space">
                        <div class="col-4">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="size">
                                        <option disabled="disabled" selected="selected">Comapny Size</option>
                                        <option value="1">Small</option>
                                        <option value="2">Medium</option>
                                        <option value="3">Large</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="type">
                                        <option disabled="disabled" selected="selected">Company Type</option>
                                        <option value="1">IT</option>
                                        <option value="2">Software</option>
                                        <option value="3">Human resource</option>
                                        <option value="4">App Development</option>
                                        <option value="5">Game</option>
                                        <option value="6">Production House< /option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-t-20">
                        <button class="btn btn--radius btn--green" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>