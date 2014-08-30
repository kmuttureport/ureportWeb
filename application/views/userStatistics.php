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
    <a class="item" href=<?=base_url()."test/systemInfo"?>>
      System Info <span class="ui label">113</span>
    </a> 
    <a class="active item" href=<?=base_url()."test/userStatistics"?>>
      User Statistics <span class="ui label">113</span>
    </a>
  </div>
    
      <div class="ui right floated black launch button">
        <i class="list layout icon"></i> Choose
      </div>
      <h2 class="ui header">
        <i class="users icon"></i>
        User Satatistics
      </h2>
    <div class="row">
      <div class="sixteen wide column" >
        <table class="ui padded table segment">
          <thead>
            <tr><th>Username</th>
            <th>Amount of Post</th>
            <th>Amount of Report</th>
            <th></th>
          </tr></thead>
          <tbody>        
            <tr>
              <td>Aborara</td>
              <td>5</td>
              <td>4</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>Motololo</td>
              <td>4</td>
              <td>3</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>Beckham</td>
              <td>6</td>
              <td>2</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>Steve</td>
              <td>7</td>
              <td>1</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>Michale</td>
              <td>4</td>
              <td>0</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
  </div>
</div>
</div>