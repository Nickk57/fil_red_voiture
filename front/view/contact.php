<?php ob_start() ?>
<div class="container-fluid mt-5 mb-5">
    <!-- <div class="col"> -->
        <div class="col-12">
            <div class="row">
                <div class="col-2"></div>
                <ul class="col-4 text-center">
                    <li><h2>Garage Nicolas</h2></li>
                    <li>adresse</li>
                    <li>code postall</li>
                    <li>telephone: 0303030303</li>
                    <li>Mobile: <span>0606060606</span></li>
                    <li>Email: exemple@exemple.fr</li>
                    <li><br></li>
                    <li><h2>Horaires d'ouverture</h2></li>
                    <li><br></li>
                    <li>Lundi - Vendredi</li>
                    <li>08:00 - 12:00 | 14:00 - 19:00</li>
                    <li><br></li>
                    <li>Samedi</li>
                    <li>08:00 - 12:00 | 14:00 - 18:00</li>
                </ul>
                <div class="col-3">
                    <div>
                        <label for="exampleFormControlInput1">Email *</label>
                        <input type="email" id="exampleFormControlInput1" name="email" class="form-control" required>
                    </div>
                    <div>
                        <label for="exampleFormControlInput1">Nom *</label>
                        <input type="text" id="exampleFormControlInput1" name="name" class="form-control" required>
                    </div>
                    <div>
                        <label for="exampleFormControlInput1">Sujet</label>
                        <input type="text" id="exampleFormControlInput1" name="object" class="form-control">
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1">Message * </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
                    </div>
                    <div>
                        <div></div>
                        <button type="submit" name="submit" class="btn btn-danger">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d748.2779078350425!2d5.736834589091838!3d49.51004983799478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eac7cb70fe755f%3A0xd56b7e01e52ae2b1!2sGarage%20St%20Maurice!5e0!3m2!1sfr!2sfr!4v1678088471880!5m2!1sfr!2sfr" 
                width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div><br>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>