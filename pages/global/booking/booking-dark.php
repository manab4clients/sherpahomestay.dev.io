<div id="bookNow" class="hotel-booking-form-1 gray-bg-dark">
    <div class="auto-container">
        <div class="hotel-booking-form-1-wrap">
            <form class="booking hotel-booking-form-1-form flex-grow-1 d-flex align-items-end">
                <input class="form-control datepicker" type="hidden" name="sendTo" value="<?= hrefPhoneNumber($phone) ?>">
                <div class="form-group">
                    <p class="hotel-booking-form-1-label text-lg-center">Check-in:</p>
                    <input placeholder="" class="form-control datepicker" type="text" name="fromDate" required>
                </div>

                <div class="form-group">
                    <p class="hotel-booking-form-1-label text-lg-center">Check-Out:</p>
                    <input placeholder="" class="form-control datepicker" type="text" name="toDate" required>
                </div>

                <div class="form-group">
                    <p class="hotel-booking-form-1-label text-lg-center">Rooms:</p>
                    <select style="display: none;" name="rooms">
                        <option data-display="1 Room">1 Room</option>
                        <?php for ($i = 2; $i <= 6; $i++) {
                            echo "<option value='{$i} Rooms'>{$i} Rooms</option>";
                        } ?>
                    </select>
                </div>

                <div class="form-group">
                    <p class="hotel-booking-form-1-label text-lg-center">Adults:</p>
                    <input placeholder="No of adults" class="form-control" type="text" name="adults" value="2" required>
                </div>

                <div class="form-group">
                    <p class="hotel-booking-form-1-label text-lg-center">Child(4-6yrs):</p>
                    <input placeholder="No of child" class="form-control" type="text" name="child" value="0" required>
                </div>

                <div class="form-group">
                    <p class="hotel-booking-form-1-label text-lg-center">Child(6+ yrs):</p>
                    <input placeholder="Child above 6" class="form-control" type="text" name="child" value="0" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn-1">Check Availability<span></span></button>
                </div>

            </form>
        </div>
    </div>
</div>