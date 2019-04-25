<?php
  //  REFER: PCRE functions
  //  Link:  https://php.net/manual/en/regexp.reference.delimiters.php
  $str1 = "TEST 1 Match";
  $str2 = "test 2 also match";
  $str3 = "test 2 also match TEST";
  //  `test 2 also match `.length = 17
  preg_match("@test@i", $str1, $match_a);
  preg_match("@test@i", $str2, $match_b);
  preg_match_all("@test@i", $str3, $match_c);
  preg_match_all("#test#i", $str3, $match_d);

  preg_match_all("+test+i", $str3, $match_e, PREG_OFFSET_CAPTURE);

  //  Single Line WARNING: Not sure the using enrivonment
  preg_match("#TEST#s", $str3, $match_f);

  echo "A:".$match_a[0]."\n";
  echo "B:".$match_b[0]."\n";
  echo "C1: ".$match_c[0][0]." C2: ".$match_c[0][1]."\n";
  echo "D1: ".$match_d[0][0]." D2: ".$match_d[0][1]."\n";

  foreach ($match_e[0] as $key => $val) {
    echo "E$key: $val[0] Index: $val[1]\n";
  }

  /*
    A:TEST
    B:test
    C1: test C2: TEST
    D1: test D2: TEST
    E0: test Index: 0
    E1: TEST Index: 18
   */