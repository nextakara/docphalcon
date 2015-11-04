<script src="/js/jquery.js"></script>
<script src="/js/jquery-ui.js"></script>
<script>
$(function() {
	$( "#menu" ).menu();
});
</script>
<style>
  .ui-menu { width: 150px; }
  </style>
<ul id="menu">
  <li class="ui-state-disabled">Aberdeen</li>
  <li><span class="ui-icon ui-icon-disk"></span>テスト</li>
  <li>Adamsville</li>
  <li>Addyston</li>
  <li>Delphi
    <ul>
      <li class="ui-state-disabled">Ada</li>
      <li>Saarland</li>
      <li>Salzburg an der schnen Donau</li>
    </ul>
  </li>
  <li>Saarland</li>
  <li>Salzburg
    <ul>
      <li>Delphi
        <ul>
          <li>Ada</li>
          <li>Saarland</li>
          <li>Salzburg</li>
        </ul>
      </li>
      <li>Delphi
        <ul>
          <li>Ada</li>
          <li>Saarland</li>
          <li>Salzburg</li>
        </ul>
      </li>
      <li>Perch</li>
    </ul>
  </li>
  <li class="ui-state-disabled">Amesville</li>
</ul>
