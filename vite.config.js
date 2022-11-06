import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";
import { homedir } from "os";
import fs from "fs";
import { resolve } from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: "resources/js/app.jsx",
            refresh: true,
        }),
        react(),
    ],
    server: detectServerConfig("vouchforme.dv"),
});

function detectServerConfig(host) {
    let keyPath = resolve(homedir(), `.config/valet/Certificates/${host}.key`);
    let certificatePath = resolve(
        homedir(),
        `.config/valet/Certificates/${host}.crt`
    );

    if (!fs.existsSync(keyPath)) {
        return {};
    }

    if (!fs.existsSync(certificatePath)) {
        return {};
    }

    return {
        hmr: { host },
        host,
        https: {
            key: fs.readFileSync(keyPath),
            cert: fs.readFileSync(certificatePath),
        },
    };
}
