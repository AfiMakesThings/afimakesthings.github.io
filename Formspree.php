<form
  action="https://formspree.io/f/{FORM_ID}"
  class="fs-form fs-layout__2-column"
  target="_top"
  method="POST"
>
  <div class="fs-field">
    <label class="fs-label" for="name">Full Name</label>
    <input class="fs-input" id="name" name="name" required />
  </div>
  <div class="fs-field">
    <label class="fs-label" for="email">Email</label>
    <input class="fs-input" id="email" name="email" required />
  </div>
  <div class="fs-field">
    <label class="fs-label" for="phone-number">Phone Number</label>
    <input
      class="fs-input"
      id="phone-number"
      name="phone-number"
      placeholder="(XXX) XXX-XXXX"
    />
  </div>
  <div class="fs-field">
    <label class="fs-label" for="company">Company</label>
    <input class="fs-input" id="company" name="company" required />
  </div>
  <div class="fs-field">
    <label class="fs-label" for="Department">Department</label>
    <input class="fs-input" id="Department" name="Department" required />
  </div>
  <div class="fs-field">
    <label class="fs-label" for="media-type">Media Type</label>
    <select class="fs-select" id="media-type" name="media-type" required>
      <option value="audio">Audio</option>
      <option value="video">Video</option>
      <option value="image">Image</option>
    </select>
  </div>
  <div class="fs-field">
    <label class="fs-label" for="description">
      Description of the requested media
    </label>
    <textarea
      class="fs-textarea"
      id="description"
      name="description"
      required
    ></textarea>
  </div>
  <div class="fs-field">
    <label class="fs-label" for="date">Date to Deliver By</label>
    <input class="fs-input" id="date" name="date" placeholder="MM-DD-YYYY" />
  </div>
  <div class="fs-field">
    <label class="fs-label">Preferred Delivery Method</label>
    <div class="fs-radio-group">
      <div class="fs-radio-field">
        <div class="fs-radio-wrapper">
          <input
            class="fs-radio"
            id="delivery-method-email-attachment"
            name="delivery-method"
            required
            type="radio"
            value="email-attachment"
          />
        </div>
        <div>
          <label class="fs-label" for="delivery-method-email-attachment">
            Email Attachment
          </label>
        </div>
      </div>
      <div class="fs-radio-field">
        <div class="fs-radio-wrapper">
          <input
            class="fs-radio"
            id="delivery-method-url"
            name="delivery-method"
            required
            type="radio"
            value="url"
          />
        </div>
        <div>
          <label class="fs-label" for="delivery-method-url">URL</label>
        </div>
      </div>
      <div class="fs-radio-field">
        <div class="fs-radio-wrapper">
          <input
            class="fs-radio"
            id="delivery-method-physical-copy"
            name="delivery-method"
            required
            type="radio"
            value="physical-copy"
          />
        </div>
        <div>
          <label class="fs-label" for="delivery-method-physical-copy">
            Physical Copy
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class="fs-field">
    <label class="fs-label" for="comments">Any Additional Comments</label>
    <textarea class="fs-textarea" id="comments" name="comments"></textarea>
  </div>
  <div class="fs-button-group">
    <button class="fs-button" type="submit">Submit</button>
  </div>
</form>