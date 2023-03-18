$input = $request->input('input');
$scriptPath = base_path('app/search/predict_word.py');
$command = 'python ' . escapeshellarg($scriptPath) . ' ' . escapeshellarg($input);
$output = '';
$returnValue = null;
exec($command, $output, $returnValue);

if ($returnValue !== 0) {
    return response()->json([
        'error' => 'Prediction failed',
        'message' => implode(PHP_EOL, $output),
    ], 500);
}

$prediction = trim(implode(PHP_EOL, $output));

return response()->json(['prediction' => $prediction]);
