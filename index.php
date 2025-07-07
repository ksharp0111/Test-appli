<?php
// Basic PHP template for modern calendar & scheduling application base
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calendrier & Planification - Base</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body>
    <div class="app-container" role="application" aria-label="Application de calendrier et planification">
        <header class="app-header">
            <h1>Calendrier</h1>
            <div class="header-controls">
                <button aria-label="Aujourd'hui" id="btnToday" title="Aujourd'hui">
                    <span class="material-icons">today</span> Aujourd'hui
                </button>
                <div class="nav-controls" role="group" aria-label="Navigation calendrier">
                    <button id="btnPrev" aria-label="Mois précédent" title="Mois précédent">
                        <span class="material-icons">chevron_left</span>
                    </button>
                    <button id="btnNext" aria-label="Mois suivant" title="Mois suivant">
                        <span class="material-icons">chevron_right</span>
                    </button>
                </div>
                <div class="calendar-toolbar search-box">
                    <input type="search" aria-label="Recherche des événements" placeholder="Rechercher événements..." id="searchInput" />
                </div>
                <div class="view-switcher" role="group" aria-label="Changer la vue du calendrier">
                    <button class="active" data-view="month" type="button" aria-pressed="true">Mois</button>
                    <button data-view="week" type="button" aria-pressed="false">Semaine</button>
                    <button data-view="day" type="button" aria-pressed="false">Jour</button>
                    <button data-view="agenda" type="button" aria-pressed="false">Agenda</button>
                </div>
            </div>
        </header>

        <aside class="panel-left" aria-label="Navigation calendrier latérale">
            <div class="mini-calendar" aria-label="Mini calendrier avec dates">
                <strong>Mini calendrier</strong><br />
                <!-- Placeholder image of mini calendar -->
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a98874ee-c7ac-4b5f-b8ba-af509521e8fc.png" alt="Mini calendrier violet avec dates et jours" width="260" height="200" />
            </div>

            <div class="calendar-list" aria-label="Liste des calendriers">
                <h2>Mes Calendriers</h2>
                <div class="calendar-item" tabindex="0">
                    <div class="calendar-color" style="background:#7c3aed;"></div>
                    Personnel
                </div>
                <div class="calendar-item" tabindex="0">
                    <div class="calendar-color" style="background:#ec4899;"></div>
                    Travail
                </div>
                <div class="calendar-item" tabindex="0">
                    <div class="calendar-color" style="background:#10b981;"></div>
                    Projets
                </div>
            </div>

            <div class="upcoming-events" aria-label="Événements à venir">
                <h2>Événements à venir</h2>
                <div class="event-item" tabindex="0" title="Réunion de projet lundi 10h">
                    Réunion projet - 10 avril 10:00
                </div>
                <div class="event-item" tabindex="0" title="Déjeuner avec l'équipe jeudi 13h">
                    Déjeuner équipe - 13 avril 13:00
                </div>
            </div>
        </aside>

        <main class="main-calendar" tabindex="0" aria-label="Vue principale du calendrier">
            <div class="calendar-grid" id="calendarGrid" role="region" aria-live="polite" aria-atomic="true">
                <p>Sélectionnez une vue pour afficher le calendrier</p>
            </div>
        </main>

        <aside class="panel-right" aria-label="Panneau de création d'événements">
            <form class="event-form" aria-labelledby="formTitle" id="eventForm" novalidate>
                <h2 id="formTitle">Créer un événement</h2>
                <label for="eventTitle">Titre</label>
                <input type="text" id="eventTitle" name="eventTitle" placeholder="Nom de l'événement" required />

                <label for="eventDescription">Description</label>
                <textarea id="eventDescription" name="eventDescription" placeholder="Détails, notes..." rows="4"></textarea>

                <label for="eventLocation">Lieu</label>
                <input type="text" id="eventLocation" name="eventLocation" placeholder="Adresse ou lieu" />

                <label for="eventStart">Début</label>
                <input type="datetime-local" id="eventStart" name="eventStart" required />

                <label for="eventEnd">Fin</label>
                <input type="datetime-local" id="eventEnd" name="eventEnd" required />

                <label for="eventCategory">Catégorie</label>
                <select id="eventCategory" name="eventCategory">
                    <option value="default">Par défaut</option>
                    <option value="work">Travail</option>
                    <option value="personal">Personnel</option>
                    <option value="holiday">Vacances</option>
                </select>

                <button type="submit">Ajouter événement</button>
            </form>
        </aside>
    </div>

    <script>
        // Dummy events data for base testing and development
        const events = [
            {
                id: '1',
                title: 'Réunion projet',
                description: 'Discussion du planning et des priorités.',
                startDate: '2024-04-10T10:00',
                endDate: '2024-04-10T11:00',
                location: 'Salle 3A',
                attendees: ['alice@example.com', 'bob@example.com'],
                category: 'work',
                isAllDay: false
            },
            {
                id: '2',
                title: 'Déjeuner équipe',
                description: 'Pause déjeuner avec l\'équipe.',
                startDate: '2024-04-13T13:00',
                endDate: '2024-04-13T14:00',
                location: 'Restaurant local',
                attendees: [],
                category: 'personal',
                isAllDay: false
            }
        ];

        // Elements references
        const calendarGrid = document.getElementById('calendarGrid');
        const viewButtons = document.querySelectorAll('.view-switcher button');
        let currentView = 'month';

        // Function to render dummy event list as placeholder in the calendar grid area
        function renderCalendarView(view) {
            calendarGrid.innerHTML = '';
            const title = document.createElement('h3');
            title.textContent = `Vue du calendrier : ${view.charAt(0).toUpperCase() + view.slice(1)}`;
            calendarGrid.appendChild(title);
            if (events.length === 0) {
                const p = document.createElement('p');
                p.textContent = 'Aucun événement à afficher.';
                calendarGrid.appendChild(p);
                return;
            }

            const list = document.createElement('ul');
            list.style.listStyle = 'none';
            list.style.padding = '0';
            list.style.marginTop = '12px';

            events.forEach(event => {
                const item = document.createElement('li');
                item.style.marginBottom = '8px';
                item.style.padding = '12px';
                item.style.borderRadius = '12px';
                item.style.background = event.category === 'work' ? 'linear-gradient(135deg, #7c3aed, #a78bfa)' :
                                  event.category === 'personal' ? 'linear-gradient(135deg, #ec4899, #f9a8d4)' :
                                  event.category === 'holiday' ? 'linear-gradient(135deg, #10b981, #6ee7b7)' :
                                  'linear-gradient(135deg, #9ca3af, #d1d5db)';
                item.style.color = 'white';
                item.textContent = `${event.title} (${event.startDate.slice(0, 10)} ${event.startDate.slice(11,16)} - ${event.endDate.slice(11,16)})`;
                list.appendChild(item);
            });

            calendarGrid.appendChild(list);
        }

        // Initialize
        renderCalendarView(currentView);

        // View switching event
        viewButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.dataset.view === currentView) return;
                currentView = btn.dataset.view;
                viewButtons.forEach(b => {
                    b.classList.remove('active');
                    b.setAttribute('aria-pressed', 'false');
                });
                btn.classList.add('active');
                btn.setAttribute('aria-pressed', 'true');
                renderCalendarView(currentView);
            });
        });

        // Navigation buttons (prev, next, today) - placeholders
        document.getElementById('btnToday').addEventListener('click', () => {
            alert('Fonction "Aujourd\'hui" non implémentée dans cette version de base.');
        });

        document.getElementById('btnPrev').addEventListener('click', () => {
            alert('Navigation vers la période précédente non implémentée dans cette version de base.');
        });

        document.getElementById('btnNext').addEventListener('click', () => {
            alert('Navigation vers la période suivante non implémentée dans cette version de base.');
        });

        // Event form submission - simple validation + add to dummy event array (no persistence)
        document.getElementById('eventForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const title = e.target.eventTitle.value.trim();
            const start = e.target.eventStart.value;
            const end = e.target.eventEnd.value;
            if (!title || !start || !end) {
                alert('Veuillez remplir les champs obligatoires.');
                return;
            }
            if (start > end) {
                alert('La date de fin doit être postérieure à la date de début.');
                return;
            }
            const newEvent = {
                id: Date.now().toString(),
                title: title,
                description: e.target.eventDescription.value.trim(),
                startDate: start,
                endDate: end,
                location: e.target.eventLocation.value.trim(),
                attendees: [],
                category: e.target.eventCategory.value,
                isAllDay: false
            };
            events.push(newEvent);
            alert('Événement ajouté (en mémoire, pas de sauvegarde réelle).');
            e.target.reset();
            renderCalendarView(currentView);
        });

    </script>
</body>
</html>

