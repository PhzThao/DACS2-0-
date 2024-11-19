<div class="mt-8 flex justify-between items-center">
    <p class="text-sm text-gray-500">
        Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} results
    </p>
    {{ $products->links() }}
</div>