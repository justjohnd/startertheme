// Toggle modal window for modal button

const modalContainers = document.querySelectorAll(".modal-container");

// List multiple modal containers in the document
for (const modalContainer of modalContainers) {
  const nodeList = modalContainer.childNodes;

  // Find the modal window element and expose it
  modalContainer.addEventListener('click', () => {
    const body = document.querySelector('body');
    body.classList.toggle('overlay-modal');
    nodeList.forEach((node) => {
      if (node.classList && node.classList.contains("modal-window")) {
        node.classList.remove('modal-hide');
        node.classList.add('modal-show');
      }
    });
  });
};
