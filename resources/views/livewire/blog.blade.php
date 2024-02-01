<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Blog</h5>
                        <form class="row g-3" wire:submit.prevent="submit">
                            <div class="col-md-6">
                                <label for="category_id" class="form-label">Select Category</label>
                                <select name="category_id" id="category_id"
                                        class="form-control"
                                        required
                                        wire:model.defer="form.category_id">
                                    <option value="">Select Category</option>
                                    <option value="">Selection</option>
                                    <!-- Add your options dynamically here -->
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Blog Title</label>
                                <input type="text" class="form-control"
                                       id="name" required placeholder="Enter blog title..."
                                       wire:model.defer="form.name">
                            </div>
                            <div class="col-md-12">
                                <label for="tags" class="form-label">Blog Tags Separated By Commas</label>
                                <input type="text"
                                       class="form-control"
                                       id="tags" placeholder="Enter tags..."
                                       wire:model.defer="form.tags">
                            </div>
                            <div class="col-md-12">
                                <label for="description" class="form-label">Blog Description</label>
                                <textarea id="description"
                                          class="form-control"
                                          wire:model.defer="form.description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="photo" class="form-label">Blog Banner</label>
                                <input type="file"
                                       class="form-control"
                                       id="photo" accept="image/*" required placeholder="Upload image..."
                                       wire:model.defer="form.photo">
                            </div>
                            <div wire:loading wire:target="form.photo"><span
                                    class="spinner-border spinner-border-sm"></span> Uploading
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg float-end"
                                        wire:loading.class="disabled"
                                        wire:offline.attr="disabled"><span wire:target="submit"
                                                                           wire:loading.class="spinner-border spinner-border-lg"></span>
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
