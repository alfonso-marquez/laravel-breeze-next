import { Center } from '@mantine/core';
import { NavbarSearch } from '../NavbarSearch/NavbarSearch';
// import { useAuth } from '@/hooks/auth'

const AppLayout = ({ children } : {children:any}) => {
    // const { user } = useAuth({ middleware: 'auth' })
    const styles: Object = {
        display: "flex",
        flexDirection: "row",
        backgroundColor: "#F5F5F5"
      };
    return (
        <div>
    

            {/* Page Heading */}
            {/* <header className="bg-white shadow">
                <div className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {header}
                </div>
            </header> */}
         
            {/* Page Content */}
            <main style={styles}>
                <NavbarSearch />
                <section style={{width: '100%', margin: "16px", backgroundColor:"white",padding: "24px" }}>{children}</section>
            </main>
        </div>
    )
}

export default AppLayout
