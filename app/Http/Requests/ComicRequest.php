namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
public function authorize()
{
return true;
}

public function rules()
{
return [
'title' => 'required|string|max:150',
'description' => 'required|string',
'thumb' => 'required|url|image',
'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/|min:0',
'series' => 'required|string|max:150',
'sale_date' => 'required|date|after_or_equal:today',
'type' => 'required|string|max:50',
'artists' => 'required|string|max:255',
'writers' => 'required|string|max:255',
];
}
}