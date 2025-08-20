<x-layouts.app :title="'Edit Product'">
  <section>
    <h2>Edit</h2>
    <form method="POST" action="{{ route('products.update', $product) }}">
      @csrf
      @method('PUT')
      <label>
        নাম
        <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
      </label>
      <label>
        বর্ণনা
        <textarea name="description" rows="3" required>{{ old('description', $product->description) }}</textarea>
      </label>
      <div style="display:flex; gap:.5rem; flex-wrap:wrap;">
        <button type="submit">আপডেট</button>
        <a href="{{ route('products.index') }}">Back</a>
      </div>
    </form>

    <details style="margin-top:1rem;">
      <summary>Delete this product</summary>
      <form method="POST" action="{{ route('products.destroy', $product) }}">
        @csrf
        @method('DELETE')
        <button type="submit" style="background:#b00020; color:#fff;">Delete</button>
      </form>
    </details>
  </section>
</x-layouts.app>