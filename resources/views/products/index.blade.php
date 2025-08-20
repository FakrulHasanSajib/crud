<x-layouts.app :title="'Product CRUD (Name & Description)'" >
  <section>
    <h2>নতুন প্রোডাক্ট</h2>
    <form method="POST" action="{{ route('products.store') }}">
      @csrf
      <label>
        নাম
        <input type="text" name="name" value="{{ old('name') }}" required>
      </label>
      <label>
        বর্ণনা
        <textarea name="description" rows="3" required>{{ old('description') }}</textarea>
      </label>
      <button type="submit">সংরক্ষণ</button>
    </form>
  </section>

  <section>
    <h2>প্রোডাক্ট লিস্ট</h2>
    <table>
      <thead>
        <tr>
          <th>নাম</th>
          <th>বর্ণনা</th>
        </tr>
      </thead>
      <tbody>
      @forelse ($products as $product)
        <tr>
          <td>{{ $product->name }}</td>
          <td>
            <div>{{ $product->description }}</div>
            <div class="row-actions">
              <a href="{{ route('products.edit', $product) }}">Edit</a>
              <form method="POST" action="{{ route('products.destroy', $product) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
              </form>
            </div>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="2">কোনো প্রোডাক্ট নেই। আগে উপরের ফর্ম দিয়ে যোগ করুন।</td>
        </tr>
      @endforelse
      </tbody>
    </table>
  </section>
</x-layouts.app>