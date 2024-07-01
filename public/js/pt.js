        // Disable right-click
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        // Disable F12, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U
        document.addEventListener('keydown', function(e) {
            if (e.key === 'F12' || 
                (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J')) || 
                (e.ctrlKey && e.key === 'U')) {
                e.preventDefault();
            }
        });

        // More reliable dev tools detection
        let devtoolsOpen = false;
        const threshold = 100;
        const checkDevTools = () => {
            const start = performance.now();
            debugger;
            const end = performance.now();
            if (end - start > threshold) {
                devtoolsOpen = true;
                alert('Developer tools are open. Please close them to continue.');
                window.location.reload();
            } else {
                devtoolsOpen = false;
            }
        };

        setInterval(checkDevTools, 1000);