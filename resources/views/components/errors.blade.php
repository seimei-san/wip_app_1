@if (count($error) > 0)
  <div class="flex justify-between p-4 item-center bg-red-500 text-white rounded-lg border-2 border-white">
    <div><strong>入力した文字を修正してください</strong></div>
    <div>
      <ul>
        @foreach ($error->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>

@endif