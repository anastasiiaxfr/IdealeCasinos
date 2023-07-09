    <form action="/" method="POST" class="review-form">
        <div class="review-form__title">
            Rate casino and write a review
        </div>
        <div class="review-form__group">
            <div>
                <label for="#">*Full Name</label>
                <input type="text" placeholder="Full Name" required id="" name="">
            </div>
            <div>
                <label for="#">*Email</label>
                <input type="email" placeholder="Email" required id="" name="">
            </div>
        </div>

        <div class="review-form__row review-form__row--inline">
            Rate

            <span>
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#star"></use>
                </svg>
            </span>

            <input type="number" step="0.1" min="0" max="5" placeholder="4.0">

        </div>

        <div class="review-form__row">
            <label for="#" class="review-form__label">
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#circle-plus"></use>
                </svg> What do you like?
            </label>
            <textarea name="" id="" cols="1" rows="5" placeholder="Pros" id="" name=""></textarea>
            <div class="review-form__note">
                150 CHARACTERS LEFT FOR PROS
            </div>
        </div>
        <div class="review-form__row">
            <label for="#" class="review-form__label">
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#circle-min"></use>
                </svg>
                What do you dislike?
            </label>
            <textarea name="" id="" cols="1" rows="5" placeholder="Cons" id="" name=""></textarea>
            <div class="review-form__note">
                150 CHARACTERS LEFT FOR cons
            </div>
        </div>

        <div class="review-form__row">
            <div class="review-form__checkbox">
                <input type="checkbox" id="review-confirm" checked>
                <label for="review-confirm">I am 18+ and I agree to receiving emails on gambling news and offers. By subscribing you verify that you are aware of terms and conditions</label>
            </div>
        </div>


        <div class="review-form__footer">
            <button class="btn-bd" type="reset">
                Cancel
            </button>
            <button class="btn-main" type="submit">
                Post my Review
            </button>
        </div>

    </form>