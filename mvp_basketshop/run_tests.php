<?php

$r_Dir = __DIR__.'/tests/results';
$text = $r_Dir.'/result_test.txt';
$xml = $r_Dir.'/result_test.xml';

if (!is_dir($r_Dir)) {
    mkdir($r_Dir, 0755, true);
}

$command = sprintf(
    'php bin/phpunit --verbose --log-junit %s > %s 2>&1',
    escapeshellarg($xml),
    escapeshellarg($text)
);

echo "***********   execution de test PHPUnit ... ************** \n";
exec($command, $output, $returnCode);

if (0 === $returnCode) {
    echo "all tests successed, and results are saved \n";
    echo '/tests/results/result_test.text';
    echo "\n";
    echo '/tests/results/result_test.xml';
} else {
    echo "some tests failed, see detail in .. \n";
    echo '/tests/results/result_test.text';
    echo "\n";
    echo '/tests/results/result_test.xml';
}
echo "\n";
exit($returnCode);
