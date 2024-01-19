import { createClient } from "@supabase/supabase-js";

const supabaseUrl = "https://hrpenrebklvfwhbvtmcm.supabase.co";
const supabaseKey =
    "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImhycGVucmVia2x2ZndoYnZ0bWNtIiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTcwNDUyNDQxMCwiZXhwIjoyMDIwMTAwNDEwfQ.W8-6Uk-FFJPcIRPcOOH7fqEP828a9bVp70JpWqxrxZs";

export const supabase = createClient(supabaseUrl, supabaseKey);
