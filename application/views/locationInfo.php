<div class="bg">
<div class="ui one column grid">
    <div class="eight wide middle column" style="margin-top: 2em">
    <div class="ui large inverted vertical sidebar menu">
    <div class="item">
      <b>Admin</b>
    </div>
    <a class="item" href=<?=base_url()."test/admin"?>>
      Reported Post <span class="ui label">213</span>
    </a>
    <a class="active item" href=<?=base_url()."test/locationInfo"?>>
      Location Info <span class="ui label">113</span>
    </a>
    <a class="item" href=<?=base_url()."test/systemInfo"?>>
      System Info <span class="ui label">113</span>
    </a> 
    <a class="item"  href=<?=base_url()."test/userStatistics"?>>
      User Statistics <span class="ui label">113</span>
    </a>
  </div>
    
      <div class="ui right floated black launch button">
        <i class="list layout icon"></i> Choose
      </div>
      <h2 class="ui header">
        <i class="inbox icon"></i>
        Location Info
      </h2>
      <table class="ui padded table segment">
          <thead>
            <tr><th>Province</th>
              <th></th>
              <th></th>
          </tr></thead>
          <tbody>        
            <tr>
              <td>Bangkok</td>
              <td><a href=<?=base_url()."test/reportedPost"?>>
                  <div class="right floated ui secondary small button">Edit</div>
                  </a>
              </td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary small button">Delete</div>
                  </a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="ui input focus" style="width:82%">
        <input type="text">
        </div>
        <div class="ui secondary small button"> Add
      </div>
      </div>

    
    <div class="eight wide right column" >
      <table class="ui padded table segment">
          <thead>
            <tr><th>District</th>
              <th></th>
              <th></th>
          </tr></thead>
          <tbody>        
            <tr>
              <td>Bang Bon</td>
              <td><a href=<?=base_url()."test/reportedPost"?>>
                  <div class="right floated ui secondary small button">Edit</div>
                  </a>
              </td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary small button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>Bang Kapi</td>
              <td><a href=<?=base_url()."test/reportedPost"?>>
                  <div class="right floated ui secondary small button">Edit</div>
                  </a>
              </td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary small button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>Bang Khae</td>
              <td><a href=<?=base_url()."test/reportedPost"?>>
                  <div class="right floated ui secondary small button">Edit</div>
                  </a>
              </td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary small button">Delete</div>
                  </a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="ui input focus" style="width:82%">
        <input type="text">
        </div>
        <div class="ui secondary small button"> Add
      </div>
    </div>
  </div>
</div>