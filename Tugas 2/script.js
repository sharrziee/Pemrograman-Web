document.addEventListener('DOMContentLoaded', loadTasks); // Load tasks from localStorage when page loads

document.getElementById('addTaskBtn').addEventListener('click', function() {
    let taskInput = document.getElementById('taskInput').value;
    let priority = document.getElementById('priority').value;
    
    if (taskInput === "") return;
    
    addTaskToDOM(taskInput, priority);
    saveTaskToLocalStorage(taskInput, priority);
    document.getElementById('taskInput').value = ""; // Reset input
});

function addTaskToDOM(taskInput, priority) {
    let taskList = document.getElementById('taskList');
    let li = document.createElement('li');
    li.classList.add(`priority-${priority}`);
    li.innerHTML = `
        <span>${taskInput}</span>
        <div>
            <button class="complete">Complete</button>
            <button class="delete">Delete</button>
        </div>
    `;
    
    taskList.appendChild(li);

    // Fungsi selesai tugas
    li.querySelector('.complete').addEventListener('click', function() {
        li.classList.toggle('completed');
    });

    // Fungsi hapus tugas
    li.querySelector('.delete').addEventListener('click', function() {
        li.remove();
        deleteTaskFromLocalStorage(taskInput);
    });
}

// Save task to localStorage
function saveTaskToLocalStorage(taskInput, priority) {
    let tasks = localStorage.getItem('tasks') ? JSON.parse(localStorage.getItem('tasks')) : [];
    tasks.push({ task: taskInput, priority: priority });
    localStorage.setItem('tasks', JSON.stringify(tasks));
}

// Load tasks from localStorage
function loadTasks() {
    let tasks = localStorage.getItem('tasks') ? JSON.parse(localStorage.getItem('tasks')) : [];
    tasks.forEach(function(taskObj) {
        addTaskToDOM(taskObj.task, taskObj.priority);
    });
}

// Delete task from localStorage
function deleteTaskFromLocalStorage(taskInput) {
    let tasks = JSON.parse(localStorage.getItem('tasks'));
    let filteredTasks = tasks.filter(taskObj => taskObj.task !== taskInput);
    localStorage.setItem('tasks', JSON.stringify(filteredTasks));
}
