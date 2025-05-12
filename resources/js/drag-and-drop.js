    const districtsBtn = document.getElementById('tab-districts-btn');
    const effectsBtn = document.getElementById('tab-effects-btn');
    const districtsContent = document.getElementById('tab-districts-content');
    const effectsContent = document.getElementById('tab-effects-content');

    districtsBtn.addEventListener('click', () => {
        districtsContent.classList.remove('hidden');
        effectsContent.classList.add('hidden');
        districtsBtn.classList.add('text-orange-400', 'bg-gray-900');
        effectsBtn.classList.remove('text-orange-400', 'bg-gray-900');
    });

    effectsBtn.addEventListener('click', () => {
        districtsContent.classList.add('hidden');
        effectsContent.classList.remove('hidden');
        effectsBtn.classList.add('text-orange-400', 'bg-gray-900');
        districtsBtn.classList.remove('text-orange-400', 'bg-gray-900');
    });



let draggedItem = null;
let data = null;

function dragStart() {
    if (this.closest('.functionGrid')) {
        draggedItem = this.cloneNode(true);
        addDragListeners(draggedItem);
    } else {
        draggedItem = this;
    }

    this.classList.add('hold');
    setTimeout(() => this.classList.add('invisible'), 0);
}

function dragEnd() {
    this.classList.remove('invisible');
    this.classList.remove('hold');
}

function dragOver(e) {
    e.preventDefault();
}

function dragEnter(e) {
    e.preventDefault();
    this.classList.add('hovered');
}

function dragLeave() {
    this.classList.remove('hovered');
}

function dragDrop() {
    this.classList.remove('hovered');
    // delete item if dropped in deadzone
    if (this.classList.contains('deadzone')) {
        if (draggedItem) draggedItem.remove();
        return;
    }
    // stop if something in dropbox
    if (this.firstChild) return;

    console.log(this.draggedItem)
    this.appendChild(draggedItem);

    // add succesfull class for feedback
    draggedItem.classList.add('successfully-dropped');
}

function addDragListeners(el) {
    el.addEventListener('dragstart', dragStart);
    el.addEventListener('dragend', dragEnd);
    el.setAttribute('draggable', 'true');
}

// Init drag listeners
document.querySelectorAll('.fill').forEach(addDragListeners);

// Drop targets: city + deadzone
document.querySelectorAll('.empty, .deadzone').forEach(zone => {
    zone.addEventListener('dragover', dragOver);
    zone.addEventListener('dragenter', dragEnter);
    zone.addEventListener('dragleave', dragLeave);
    zone.addEventListener('drop', dragDrop);
});
