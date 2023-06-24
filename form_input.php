<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Create account</title>
    <style>
      ul {text-align: center;}
      .center {text-align: center;}
      .title {
        font-weight: bold;
        font-weight: 900;
        font-size: 18px;
        text-align: center;
      }
      .large_br {
        content: "";
        margin: 2%;
        display: block;
      }
      .container {
        width: 500px;
      }
      .input_size {
        width: 200px;
      }
      .container1 {
        width: 49.7%;
      }
      .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
      }
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      input, label {
        display:inline-block;
      }
      .input_align {
        float:left;
        padding-right: 10px;
      }
      
</style>
</head>
<body style="background-color:rgb(223, 223, 223);">

  <p>Please fill in this form to create an account.</p>
  <hr>
  <form action="sign_in.php" method="post">
    <div class="container">


      <br><div class="title"><u>Personal Infomation</u></div><br>
      <div class="form-group col-sm-6 input_align">
        <label>First Name</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name" />
          </div>
      </div>

      <div class="form-group col-sm-6">
        <label>Last Name</label>
          <div>
            <input class="form-control easyui-textbox input_size" id="name1" />
          </div>
      </div>
      
      <div class="form-group col-sm-6">
        <label>Phone Number</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name1" />
          </div>
      </div>

      <br><div class="title"><u>Login Infomation</u></div><br>
      <div class="form-group col-sm-6">
        <label>Email</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name1" />
          </div>
      </div>

      <div class="form-group col-sm-6">
        <label>Retype Email</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name1" />
          </div>
      </div>

      
      <div class="form-group col-sm-6">
        <label>Login ID</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name1" />
          </div>
      </div>

      <div class="form-group col-sm-6">
        <label>Password</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name1" />
          </div>
      </div>

      <div class="form-group col-sm-6">
        <label>Re-type Password</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name1" />
          </div>
      </div>

      <br><div class="title"><u>Contact Infomation</u></div><br>
      <div class="form-group col-sm-6">
        <label>Address</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name1" />
          </div>
      </div>

      <div class="form-group col-sm-6">
        <label>City</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name1" />
          </div>
      </div>

      <div class="form-group col-sm-6">
        <label>State</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name1" />
          </div>
      </div>

      <div class="form-group col-sm-6">
        <label>Zip Code</label>
          <div>
            <input class="form-control easyui-textbox" style="width:200px" id="name1" />
          </div>
      </div><br>
      <input type="submit" name="log" value="Submit">
    </div>
  </form>
</body>
</html>