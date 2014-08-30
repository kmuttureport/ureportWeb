<div class="bg">
<div class="ui one column grid" style="margin-bottom:3em">
    <div class="sixteen wide middle column" style="margin-top: 2em">
    <div class="ui large inverted vertical sidebar menu">
    <div class="item">
      <b>Admin</b>
    </div>
    <a class="active item" href=<?=base_url()."test/reportedPost"?>>
      Reported Post <span class="ui label">213</span>
    </a>
    <a class="item" href=<?=base_url()."test/locationInfo"?>>
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
        <i class="users icon"></i>
        Reported Post
      </h2>
    <div class="row">
      <div class="sixteen wide column" >
        <table class="ui padded table segment">
          <thead>
            <tr><th>Post Name</th>
            <th>User Name</th>
            <th>No of Report</th>
            <th></th>
            <th></th>
          </tr></thead>
          <tbody>        
            <tr>
              <td>Help the road is broken</td>
              <td>SSSanwich</td>
              <td>10</td>
              <td><a href=<?=base_url()."test/reportedPost"?>>
                  <div class="right floated ui secondary button">View</div>
                  </a>
              </td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>No Road sign</td>
              <td>Loodpra</td>
              <td>2</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">View</div>
                  </a>
              </td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">Delete</div>
                  </a>
              </td>
            </tr>
            <tr>
              <td>So noisy</td>
              <td>Lookmoo</td>
              <td>5</td>
              <td><a href=<?=base_url()."test/feed"?>>
                  <div class="right floated ui secondary button">View</div>
                  </a>
              </td>
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