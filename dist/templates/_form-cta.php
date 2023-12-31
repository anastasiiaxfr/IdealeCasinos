<section class="mb-0">
    <div class="form__wrap">
        <div class="form__caption">
            Love to hear from you,<br> Get in touch 👋🏻
        </div>

        <form action="/" method="POST" novalidate class="form">

            <div class="form__row">
                <div class="form__field">
                    <label for="user_name">*Full Name </label>
                    <input class="form__input" type="text" name="user_name" id="user_name" placeholder="Full Name" required>
                    <div class="form__error">
                        *Required field
                    </div>
                </div>
                <div class="form__field">
                    <label for="user_email">*Email </label>
                    <input class="form__input" type="email" name="user_email" id="user_email" placeholder="email@mail.com" required>
                    <div class="form__error">
                        *Required field
                    </div>
                </div>
                <div class="form__field">
                    <label for="user_phone">Phone </label>
                    <input class="form__input" type="text" name="user_phone" id="user_phone" placeholder="+ xx (xxx) xxx xx xx" required>
                    <div class="form__error">
                        *Required field
                    </div>
                </div>
                <div class="form__field">
                    <label for="user_req">*Subject </label>
                    <?php
                    $select = array(
                        array("title" => "Subject", "value" => "default"),
                        array("title" => "2023", "value" => "2023"),
                        array("title" => "2022", "value" => "2022"),
                    );
                    ?>
                    <?php include '_select.php'; ?>
                    <div class="form__error">
                        *Required field
                    </div>

                </div>

                <div class="form__field">
                    <label for="user_msg">*Message</label>
                    <textarea class="form__input" name="user_msg" id="user_msg" placeholder="Message" required></textarea>
                    <div class="form__error">
                        *Required field
                    </div>
                </div>
            </div>
            <div>
                <div class="form__note">
                    By sending this form I confirm that I have read and accept IDEALE <a href="#">Privacy Policy</a>
                </div>
            </div>
            <input class="form__btn" type="submit" value="Send">
        </form>
    </div>
</section>