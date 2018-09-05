<!-- Toolbar At The Top -->
<section class='toolbar'>

  <div class="left-section">
    <i class='fa fa-linux'></i> Linux Desktop
  </div>

  <div class='right-section'>
    <!-- Wifi Network -->
    <span class='wifi rm-margins' open-dropdown='wifi'>
      <i class='fa fa-wifi'></i>
      <div class="dropdown avaliable-wifis" must-open='wifi'>
        <p>Available Wifi</p>
        <ul>
          <li><i class='fa fa-check-circle'></i> CE-ASaber</li>
          <li>Mohamed</li>
          <li>TE-Data</li>
          <li open-popup='wifi-po'>See More...</li>
        </ul>
      </div>
    </span>

    <!-- Languages -->
    <span class="language open-dropdown" open-dropdown='lang'>
      <i class='fa fa-globe'></i> En
      <div class="dropdown languages" must-open='lang'>
        <ul>
          <li><span class='lang'>Ar</span> Arabic</li>
          <li><span class='lang'>En</span> English</li>
          <hr>
          <li open-popup='lang-po'><i class='fa fa-plus'></i> Add new</li>
        </ul>
      </div>
    </span>

    <!-- Battery Level -->
    <span class='rm-margins battery'>
      <i class='fa fa-battery-half'></i>
    </span>

    <!-- Date And Time -->
    <span class='date-and-time center' open-dropdown='cal'>
      <i class='fa fa-calendar'></i>
      25/2/2002 - 21:22:50
      <div class='dropdown' must-open='cal'>
        <div class="calender"></div>
        dd
      </div>
    </span>

    <!-- The Username at Right Section -->
    <span class='username-app' open-dropdown='settings'>
      <i class='fa fa-linux'></i> Abdulrahman
      <div class='dropdown user-settings' must-open='settings'>
        <ul>
          <li>Settings</li>
          <li>Shutdown</li>
          <li>Suspend</li>
        </ul>
      </div>
    </span>

  </div>
</section>
