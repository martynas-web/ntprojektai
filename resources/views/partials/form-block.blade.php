<div class="contacts-wrapper" id="Contacts">
    <div class="container contacts-widget">
        <div class="row">
            <div class="col-sm-6 contacts-persons">
              @foreach ($contacts_posts as $item)
                <div class="row contacts-info d-flex align-items-center">
                    <div class="col-md-4 contacts-photo"><img src="{!! $item['image'] !!}" width="130px" height="130px" class="rounded-circle" alt="Person-1">   </div>
                    <div class="col-md-8 contacts-details">
                        <p class="contacts-name">{!! $item['title'] !!}</p>
                        <p class="contacts-mail"><a href="mailto:{!! $item["contact"]["email"] !!}">{!! $item["contact"]["email"] !!}</a></p>
                        <p class="contacts-phone"><a href="tel:{!! $item["contact"]["phone"] !!}">{!! $item["contact"]["phone"] !!}</a></p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-sm-6 contacts-form">
                <h1 class="contacts-form-heading">Sužinok apie projektą daugiau</h1>
                <form class="validation-form" novalidate method="post" action="">
                    <div class="form-group contacts-form-field">
                      <input type="text" class="form-control" id="name" placeholder="Jūsų vardas" name="name" required>
                      <div class="invalid-feedback">Prašome įrašyti savo vardą.</div>
                    </div>
                    <div class="form-group contacts-form-field">
                        <input type="email" class="form-control" id="email" placeholder="El. paštas" name="email" required>
                        <div class="invalid-feedback">Prašome įrašyti tinkamą el pašto adresą.</div>
                      </div>
                      <div class="form-group contacts-form-field">
                        <input type="number" class="form-control" id="number" placeholder="Telefono numeris" name="number" required>
                        <div class="invalid-feedback">Prašome įrašyti tinkamą telefono numerį</div>
                      </div>
                      <div class="form-group contacts-form-field">
                        <input type="text" class="form-control" id="message" placeholder="Žinutė" name="message" required>
                        <div class="invalid-feedback">Prašome įrašyti žinutę.</div>
                      </div>
                    <div class="form-group form-check contacts-form-check">
                      <label class="form-check-label">
                        <input class="form-check-input form-control" type="checkbox" required><p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptas. <a href="mailto:ntprojects@info.com">ntprojects@info.com</p></a>
                        <div class="invalid-feedback">Prašome sutikti su taisyklėmis .</div>
                      </label>
                    </div>
                    <button type="submit" class="btn form-button">Siųsti</button>
                  </form>
            </div>
        </div>
    </div>
</div>