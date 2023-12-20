# laravel-dompdf


```bash
composer require barryvdh/laravel-dompdf
```

```php
use Barryvdh\DomPDF\Facade\Pdf;

$pdf = Pdf::loadView('pdf.invoice', $data);
return $pdf->download('invoice.pdf');


return Pdf::loadFile(public_path().'/myfile.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');
```
