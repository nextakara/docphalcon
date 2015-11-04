<script src="/js/jquery.js"></script>
<script src="/js/jquery-ui.js"></script>
<script>
$(function() {
	$( "#menu" ).menu();
});
</script>
<ul id="menu">
  <li class="ui-state-disabled">Aberdeen</li>
  <li>テスト</li>
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
