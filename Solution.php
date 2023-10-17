<?php
class Solution
{
    private $file;

 
    public function readfile($filepath)
    {
        $file = fopen($filepath,'r');
        $fileContent = []; 
        while(!feof($file))
        {
            array_push($fileContent,(int) fgets($file));
        }
        return $fileContent;
    }

    public function calculateSum($fileContent)
    {
        $sum=0;
        $count=0;
        $numSum=[];
        for($i=0;$i < count($fileContent);$i++)
        {
            for($j=1; $j<count($fileContent);$j++)
            {
               $sum = $fileContent[$i] +$fileContent[$j];
               if($sum == 1327)
               {
                $numSum[$count] = ['First Number'=>$fileContent[$i],'Second Number'=>$fileContent[$j],
                'Steps'=>$fileContent[$i] * $fileContent[$j]];
               }
               $count++;
            }
        }
        return $numSum;
    }
}

$solution = new Solution();
$fileContent = $solution->readFile('NumFile.txt');
print_r($solution->calculateSum($fileContent));
