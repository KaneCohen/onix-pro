<x-onixpro::layout.main>

    <div class="grid grid-cols-3 gap-6">
        <div>
            <label for="my-modal-2" class="btn btn-primary modal-button">open modal</label>
            <input type="checkbox" id="my-modal-2" class="modal-toggle">
            <div class="modal">
                <div class="modal-box">
                    <p>Enim dolorem dolorum omnis atque necessitatibus. Consequatur aut adipisci qui iusto illo eaque.
                        Consequatur repudiandae et. Nulla ea quasi eligendi. Saepe velit autem minima.</p>
                    <div class="modal-action">
                        <label for="my-modal-2" class="btn btn-primary">Accept</label>
                        <label for="my-modal-2" class="btn">Close</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6">

        <div class="card bordered lg:bg-base-200 rounded-box">
            <div class="card-body">
                <h2 class="card-title">Component name
                    <div class="badge mx-2 badge-secondary">Date</div>
                </h2>
                <div class="flex flex-row w-full">
                    <div class="grid flex-grow h-32 card bg-base-300 rounded-box place-items-center">content</div>
                </div>

                <div class="justify-end card-actions">
                    <button class="btn btn-secondary">Edit</button>
                </div>
            </div>
        </div>

        <div class="card bordered lg:bg-base-200 rounded-box">
            <div class="card-body">
                <h2 class="card-title">Component name
                    <div class="badge mx-2 badge-secondary">Date</div>
                </h2>
                <div class="flex flex-row w-full">
                    <div class="grid flex-grow h-32 card bg-base-300 rounded-box place-items-center">content</div>
                </div>

                <div class="justify-end card-actions">
                    <button class="btn btn-secondary">Edit</button>
                </div>
            </div>
        </div>


    </div>

    <div class="btn-group">
        <button class="btn">Previous</button>
        <button class="btn">1</button>
        <button class="btn btn-active">2</button>
        <button class="btn">3</button>
        <button class="btn">4</button>
        <button class="btn">Next</button>
    </div>

</x-onixpro::layout.main>
