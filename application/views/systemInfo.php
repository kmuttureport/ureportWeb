<div class="bg">
<div class="ui one column grid" style="margin-bottom:3em">
    <div class="sixteen wide middle column" style="margin-top: 2em">
    <div class="ui large inverted vertical sidebar menu">
    <div class="item">
      <b>Admin</b>
    </div>
    <a class="item" href=<?=base_url()."test/reportedPost"?>>
      Reported Post <span class="ui label">213</span>
    </a>
    <a class="item" href=<?=base_url()."test/locationInfo"?>>
      Location Info <span class="ui label">113</span>
    </a>
    <a class="active item" href=<?=base_url()."test/systemInfo"?>>
      System Info <span class="ui label">113</span>
    </a> 
    <a class="item" href=<?=base_url()."test/userStatistics"?>>
      User Statistics <span class="ui label">113</span>
    </a>
  </div>
    
      <div class="ui right floated black launch button">
        <i class="list layout icon"></i> Choose
      </div>
      <h2 class="ui header">
        <i class="users icon"></i>
        System Info
      </h2>
    <div class="row">
      <div class="sixteen wide column" >
        <table class="ui padded table segment">
          <thead>
            <tr><th>Problems Groups</th>
            <th></th>
            <th></th>
          </tr></thead>
          <tbody>        
            <tr>
              <td>Road Problem</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Edit</div>
                  </a>
              </td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>Garbage Problem</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Edit</div>
                  </a>
              </td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>Water Problem</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Edit</div>
                  </a>
              </td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>Other Problem</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Edit</div>
                  </a>
              </td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="ui input focus" style="width:92%">
        <input type="text">
        </div>
        <div class="ui secondary button"> Add
      </div>
      </div>
  </div>
  </div>
</div>
</div>