<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Register Panel</title>
  </head>
  <body>
    <div class="outer">
      <form class="inner">
        <h1>Register</h1>

        <input
          type="text"
          placeholder="Name"
          class="input"
          id="user"
          autocomplete="off"
        />
        <input
          type="tel"
          id="phoneNumber"
          class="input"
          placeholder="Contact Number"
          pattern="[0-9]{10}"
          name="phoneNumber"
          maxlength="10"
        />
        <select name="hostel" class="input" id="hostel">
          <option value="">-- Select Hostel --</option>
          <option value="AN Khosla">AN Khosla</option>
          <option value="MV">MV</option>
          <option value="NSCB">NSCB</option>
          <option value="PG">PG</option>
          <option value="GSM">GSM</option>
          <option value="Rana Punja">Rana Punja</option>
          <option value="PHD">PHD</option>
        </select>
        <input type="text" placeholder="POC" class="input" id="poc" />
        <input
          type="text"
          placeholder="Year"
          class="input"
          id="year"
          autocomplete="off"
        />
        <input
          type="text"
          placeholder="Branch"
          class="input"
          id="branch"
          autocomplete="off"
        />
          <button type="submit" id="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
